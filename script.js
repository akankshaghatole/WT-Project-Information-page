let base_url = "list.php";
$("document").ready(function()
{
    getData();
    document.querySelector("#disease").addEventListener("change",GetLI);
});
function getData() 
{
    let url = base_url + "?req=menu_name_list";
    $.get(url,function(value,success)
    {
        for (const a in value)
        {
            let option = document.createElement("option");
            option.textContent = value[a].name;
            option.value = value[a].name; 
            document.querySelector('#disease').appendChild(option);
        }
    });
}     
function GetLI(k)
{
    let index=k.target.value;        
    let url=base_url + "?req=menuName&name="+index;
    $.get(url,function(val,success)
    {            
        if(val != null)
        {
            let x = val;
            let pre = x.precaution;         
            if(pre == null)
            {
                psmall = "Not available";
            }
            let descrp = x.description;
            if(descrp == "")
            {
                descrp = "Description not available";
            }
            document.querySelector("#name").textContent = x.name;
            document.querySelector("#sname").textContent = x.sci_name;
            document.querySelector("#descp").textContent = descrp;
            document.querySelector("#pre").textContent = pre;
            document.querySelector("#cause").textContent = x.cause;
           
        }
        document.getElementById("table").style.display = "block";
    });
}
