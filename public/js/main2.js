$(document).ready(function () {
    var max_fields_2      = 20; //maximum input boxes allowed
    var wrapper_2     = $(".input_fields_wrap"); //Fields wrapper
    var wrapper_2_edit        = $(".input_fields_wrap_edit"); //Fields wrapper_2 edit
    var add_button_2   = $("#add_button_2"); //Add button ID

    var y = 0; //initlal text box count
    $("#add_button_2").click(function(e){ //on add input button click
        e.preventDefault();
        if(y < max_fields_2){ //max input box allowed
            y++; //text box increment

            $(wrapper_2).append('' +
                ' <div><label for="titulo_2">Digite a pergunta</label>\n' +
                '                <textarea type="text"  class="form-control" name="titulo_2'+y+'">  </textarea>\n' +
                '                <label for="description_2">Digite a descrição</label>\n' +
                '                <textarea type="text"  class="form-control" name="description_2'+y+'">  </textarea><br><a href="#" class="remove_field">Remover</a></div>' +
                '                <input type="hidden" name="count" value="'+y+'"> </div> '); //add input box

        }
    });

    console.log(y);

    $(wrapper_2).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); y--;
    });

    $(wrapper_2_edit).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); y--;
    });
});