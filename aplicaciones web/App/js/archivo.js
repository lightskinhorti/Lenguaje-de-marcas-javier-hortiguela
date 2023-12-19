// Cuando el documento este preparado
$(document).ready(function(){
    //Cuando pase el raton por encima del articulo
    $("section article").hover(function(){
        //añade la clase aumentado
        $(this).addClass("aumentado")
    })
    //cuando quite el raton de encima del articulo
    $("section article").mouseout(function(){
        //le quitamos la clase aumentadoq
        $(this).removeClass("aumentado")
    })
    //cuando haga click en el boton anterior quiero que la tira actual avance una casilla
    $(".anterior").click(function(){
        
        var midesfase = 0
        
        $(this).parent().parent().find(".ribbon").each(function(){
            
            midesfase = $(this).css("left")
        }) 
        midesfase = Math.round((midesfase.replace("px","")*1)/100)*100
        midesfase -= 200;
        console.log(midesfase)
        $(this).parent().parent().find(".ribbon").each(function(){
            $(this).css("left",(midesfase)+"px")
        })
        
    })
    //cuando haga click en el boton posterior quiero que la tira actual retroceda una casilla
    $(".posterior").click(function(){
        var midesfase = 0
        $(this).parent().parent().find(".ribbon").each(function(){
            midesfase = $(this).css("left")
        })
        midesfase = Math.round((midesfase.replace("px","")*1)/100)*100
        midesfase += 200;
        console.log(midesfase)  
        $(this).parent().parent().find(".ribbon").each(function(){
            $(this).css("left",(midesfase)+"px")
        })
    })
   //Cuando sobre un articulo haga click
    $("article").click(function(){
        //A los detalles les quita la clase abierto y muy abiertp
        $(this).parent().parent().next().removeClass("abierto")
        $(this).parent().parent().next().removeClass("muyabierto")
        //Dentro de un segundo y medio carga las nuevas caracteristicas
        var este = $(this)
        setTimeout(function(){
            este.parent().parent().next().addClass("abierto")
            este.parent().parent().next().find("h2").text(titulo)
            este.parent().parent().next().find("h3").text(subtitulo)
            este.parent().parent().next().find("p").text(descripcion)
            este.parent().parent().next().find("img").attr("src",imagen)
            
        },1500) 
        //Cogeme los datos de titulo, texto, etc del articulo en el cual he hecho click
            var titulo = ""
            $(this).find("h3").each(function(){
                 titulo = $(this).text()
            })
            var subtitulo = ""
            $(this).find("h4").each(function(){
                 subtitulo = $(this).text()
            })
            var descripcion = ""
            $(this).find("p").each(function(){
                 descripcion = $(this).text()
            })
            var imagen = ""
            $(this).find("img").each(function(){
                 imagen = $(this).attr("src")
            })

    })
    //Cuando click en el boton de mas informacion hazlo mas grande todavia
    $(".masinfo").click(function(){
        $(this).parent().addClass("muyabierto")
    })
})

