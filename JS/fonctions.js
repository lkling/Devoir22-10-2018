function creerUneConference()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Ctrl_Interface/creerUneConference",
            data:"",
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