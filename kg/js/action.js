function editAction(mylink){
	var selected_index = $('input:radio:checked');
	var selected_id = $("#"+selected_index.val()).val();
	if(selected_index.length==0)
	{
		oDialog.html("Mohon pilih data terlebih dahulu.");
		oDialog.dialog('open');
	}
	else
	{
		this.location.href = mylink+"/"+selected_id;
	}
}

function deleteAction(mylink){
	var selected_index = $('input:radio:checked');
	var selected_id = $("#"+selected_index.val()).val();
	if(selected_index.length==0)
	{
		oDialog.html("Mohon pilih data terlebih dahulu.");
		oDialog.dialog('open');
	}
	else
	{
		oDialog.html("Yakin ingin menghapus data ini?");
		oDialog.dialog( "option", "buttons", {
			 "OK": function() {
					$.post( mylink,
							{ id : selected_id },
							function(msg){
								oDialog.dialog( "option", "buttons", { "Ok": function() { $(this).dialog("close"); } } );
								var result = msg.split('#');
								oDialog.html(result[1]);
								oDialog.dialog('open');
								if(result[0]=='S')
								{
									oTable.fnDeleteRow(selected_index.val());
								}
							}
					);
					$(this).dialog("close"); 
			 	}, 
			 "Batal": function() { $(this).dialog("close"); } 
		} );
		oDialog.dialog('open');
	}
}
