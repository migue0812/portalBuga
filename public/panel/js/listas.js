$('#categoria').on('change',function(e){
    console.log(e);
    var cat_id =e.target.value;
    $.get('../sitio/subcategoria?cat_id=' + cat_id, function(data){
        $('#subcategoria').empty();
        $.each(data, function(crear, subcategorias){
            $('#subcategoria').append('<option value="'+subcategorias.subcat_id+'">'+subcategorias.subcat_nombre+'</option>');
        });
    });
});

$('#categoriaE').on('change',function(e){
    console.log(e);
    var cat_id =e.target.value;
    $.get('../../sitio/subcategoria?cat_id=' + cat_id, function(data){
        $('#subcategoriaE').empty();
        $.each(data, function(editar, subcategorias){
            $('#subcategoriaE').append('<option value="'+subcategorias.subcat_id+'">'+subcategorias.subcat_nombre+'</option>');
        });
    });
});


