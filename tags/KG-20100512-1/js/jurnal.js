function isValueInArray(val, arr) {
	inArray = false;
	for (j = 0; j < arr.length; j++)
		if (val == arr[j]) inArray = true;
	return inArray;
}

function cekData() {
	var tbl = $('#tblDetail');
	var lastRow = tbl.find("tr").length;
	var debitSum = 0;
	var kreditSum = 0;
	var akunExist = new Array();
	if (($("#debit1").val() == '' && $("#kredit1").val() == '') || ($("#debit2").val() == '' && $("#kredit2").val() == ''))
	{
		oDialog.html("Minimal dua data pada detail harus dimasukkan.");
		oDialog.dialog('open');
		return false;
	} else {
		for (i=1; i<lastRow; i++) {
			// akun tidak boleh ada yang sama
			if (isValueInArray($("#akun"+i).val(),akunExist)) {
				oDialog.html("Data akun pada table detail tidak boleh sama.");
				oDialog.dialog('open');
				return false;
			} else {
				akunExist[akunExist.length] = $("#akun"+i).val();
			}
			// hitung jumlah debit
			if ($("#debit"+i).val() != '') {
				debitSum += parseInt($("#debit"+i).val());
			}
			// hitung jumlah kredit
			if ($("#kredit"+i).val() != '') {
				kreditSum += parseInt($("#kredit"+i).val());
			}
		}
		if (debitSum == 0 || kreditSum == 0) {
			oDialog.html("Jumlah data debit maupun kredit tidak boleh 0.");
			oDialog.dialog('open');
			return false;
		} else if(debitSum != kreditSum) {
			oDialog.html("Jumlah debit harus sama dengan jumlah kredit.");
			oDialog.dialog('open');
			return false;
		} else {
			return true;
		}
	}
}

function cekDebit(i) {
	var debit = $("#debit"+i);
	var kredit = $("#kredit"+i);
	if (debit.val() != '' && debit.val() != '0' ) {
		kredit.attr("disabled", "true");
	} else {
		kredit.removeAttr("disabled");
	}
}

function cekKredit(i) {
	var debit = $("#debit"+i);
	var kredit = $("#kredit"+i);
	if (kredit.val() != '' && kredit.val() != '0' ) {
		debit.attr("disabled", "true");
	} else {
		debit.removeAttr("disabled");
	}
}

function addRow() {
	var tbl = $('#tblDetail');
	var lastRow = tbl.find("tr").length;
	var emptyrows = 0;
	for (i=1; i<lastRow; i++) {
		if ($("#debit"+i).val() == '' && $("#kredit"+i).val() == '') {
			emptyrows += 1;
		}
	}	
	if (emptyrows == 0 ) {
		var ddlAkun = '<select name="akun[]" id="akun'+lastRow+'" class="combo" >';
		ddlAkun += $("#akun1").html();
		ddlAkun += '</select>';
		var txtDebit = '<input name="debit'+lastRow+'" id="debit'+lastRow+'" class="field" title="Debit harus diisi dengan angka" onBlur="cekDebit('+lastRow+');" />';
		var txtKredit = '<input name="kredit'+lastRow+'" id="kredit'+lastRow+'" class="field" title="Kredit harus diisi dengan angka" onBlur="cekKredit('+lastRow+');" />';
		tbl.children().append("<tr><td>"+ddlAkun+"</td><td>"+txtDebit+"</td><td>"+txtKredit+"</td></tr>");
		$("#debit"+lastRow).rules("add", "integer");
		$("#kredit"+lastRow).rules("add", "integer");
	} else {
		oDialog.html("Silahkan mengisi data pada baris yang tersedia terlebih dahulu, sebelum menambah baris.");
		oDialog.dialog('open');
	}
}
