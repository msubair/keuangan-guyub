$(document).ready(function() {
	oTable = $('#group_table').dataTable({
		"fnDrawCallback": function ( oSettings ) {
			if ( oSettings.aiDisplay.length == 0 )
			{
				return;
			}
			
			var nTrs = $('#group_table tbody tr');
			var iColspan = nTrs[0].getElementsByTagName('td').length;
			var sLastGroup = "";
			var i=0;
			for ( var i=0 ; i<nTrs.length ; i++ )
			{
				var iDisplayIndex = oSettings._iDisplayStart + i;
				var sGroup = oSettings.aoData[ oSettings.aiDisplay[iDisplayIndex] ]._aData[0];
				if ( sGroup != sLastGroup )
				{
					var nGroup = document.createElement( 'tr' );
					var nCell = document.createElement( 'td' );
					nCell.colSpan = iColspan;
					nCell.className = "group";
					nCell.innerHTML = sGroup;
					nGroup.appendChild( nCell );
					nTrs[i].parentNode.insertBefore( nGroup, nTrs[i] );
					sLastGroup = sGroup;
				}
			}
		},

		"bJQueryUI": true,
		"sPaginationType": "full_numbers"
	});
	oTable.fnSetColumnVis(0,false);


} );
