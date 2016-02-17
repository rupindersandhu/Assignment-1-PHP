<script>
    function stock_onclick() {
        var url =document.getElementById("stocklist").value;
        location.href = '/Stock/' + url;
    }
    
</script>

{pageselect}

{stocktable}

<br />
<br />

{movementtable}
<h1>This is the Stock page</h1>
