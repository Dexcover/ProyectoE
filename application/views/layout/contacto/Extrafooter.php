<?php $this->view("FinalPage"); ?>

<script>
    window.onload = function(){
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        $('#files').on("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            var j=0;
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if(file.type.match('image.*')){
                    if(this.files[0].size < 2097152){
                  // continue;
                    var picReader = new FileReader();
                    picReader.addEventListener("load",function(event){
                        j++;
                        var picFile = event.target;
                        var div = document.createElement("div");
                        div.className="col-md-4";
                        div.id="cotizar";
                        
                        div.innerHTML = "<div class='col-md-6'><img class='thumbnail-fotos img-responsive' src='" + picFile.result + "'" +
                                "title='preview image'/></div><div class='col-md-6'><div class='form-group'><label class='control-label' for='tamanio"+j+"'>Tamaño estimado (cm)</label> <input type='text' class='form-control' id='tamanio"+j+"' name='tamanio"+j+"' placeholder='15x20' required/></div>  <div class='form-group'><label class='control-label' for='cantidad"+j+"'>Cantidad estimada</label> <input type='text' class='form-control' id='cantidad"+j+"' name='cantidad"+j+"' placeholder='cantidad' required/></div></div>";

                        output.insertBefore(div,null);
                    });
                    //Read the image
                    $('#clear, #result').show();
                    picReader.readAsDataURL(file);
                    }else{
                        alert("Imagen muy grande, mínimo 2 Mb.");
                        $(this).val("");
                    }
                }else{
                alert("Solo tipo imagen");
                $(this).val("");
            }
            }

        });
    }
    else
    {
        console.log("Considere cambiar de navegar para cotizar sus diseños, gracias.");
    }
}

   $('#files').on("click", function() {
        $('#result').children().remove();
        $('result').hide();
        $(this).val("");
    });

    $('#clear').on("click", function() {
        $('#result').children().remove();
        $('#result').hide();
        $('#files').val("");
        $(this).hide();
    });

</script>




</body>

</html>
