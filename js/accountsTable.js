YUI().use('datatable-scroll', "datasource-io", "datasource-jsonschema", "datatable-datasource", function (Y) {
    var dataSource = new Y.DataSource.IO({ 
    	source: "php/economic-ajax.php" 
    });
    
    dataSource.plug(Y.Plugin.DataSourceJSONSchema, {
    	schema: {
    		resultFields: ["Number","Name","Balance"]
        }
    });
    
    var columns = [
        { key: "Number", label: "No." },
        { key: "Name", label: "Name" },
        { key: "Balance", label: "Balance" }
    ];
    
    var table = new Y.DataTable({
        caption: "Accounts Data",
        columns: columns,
        scrollable: "y",
        height:"300px"})
    	.plug(Y.Plugin.DataTableDataSource, { datasource: dataSource });
    
    table.render('#economicAccountsData');
    table.datasource.load();
});