YUI().use('datatable-scroll', "datasource-io", "datasource-jsonschema",
		"datatable-datasource", function(Y) {
			var columns = [ {
				key : "Number",
				label : "No."
			}, 'Name', 'VAT' ];

			var dataSource = new Y.DataSource.IO({
				source : "php/economic-ajax.php"
			});

			dataSource.plug(Y.Plugin.DataSourceJSONSchema, {
				schema : {
					resultFields : [ "Number", "Name", {
						key : 'VAT',
						locator : "VatAccountHandle.VatCode"
					} ]
				}
			});

			var table = new Y.DataTable({
				caption : "Accounts Data",
				columnset : columns,
				scrollable : "y",
				height : "300px"
			}).plug(Y.Plugin.DataTableDataSource, {
				datasource : dataSource
			});

			table.render('#economicAccountsData');
			table.datasource.load();
		});