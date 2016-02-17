<script>
    function stock_onclick() {
        var url =document.getElementById("stocklist").value;
        location.href = '/stock/' + url;
    }
    
</script>

{pageselect}

{stocktable}

<br />
<br />

{movementtable}
<h1>This is the Stock page</h1>
