function afficherConferences($codeConference)
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Ctrl_Interface/afficherConferences",
            data:"codeConf="+nbvotes,
            success:function(data)
            {
                $('#divConferences').empty();
                $('#divConferences').append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
    );
}