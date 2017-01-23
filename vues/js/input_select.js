$(function() {
    $('#ip_src_input').hide();
    $('#port_src_input').hide();
    $('#ip_dst_input').hide();
    $('#port_dst_input').hide();
    $('#creation_port_macro').hide();
    $('#creation_interface_macro').hide();
    $('#contenu_port_macro').hide();
    $('#contenu_interface_macro').hide();

    $('#ip_src_select').change(function(event) {
        if ($(this).val() === 'Entrez une ip') {
            $('#ip_src_input').show();
            $('#ip_src_select').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_ip_src').click(function (event) {
        $('#ip_src_select').show();
        $('#ip_src_input').hide();
        event.preventDefault();
    });

    $('#port_dst_select').change(function(event) {
        if ($(this).val() === 'Entrez un port') {
            $('#port_dst_input').show();
            $('#port_dst_select').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_port_dst').click(function (event) {
        $('#port_dst_select').show();
        $('#port_dst_input').hide();
        event.preventDefault();
    });

    $('#port_src_select').change(function(event) {
        if ($(this).val() === 'Entrez un port') {
            $('#port_src_input').show();
            $('#port_src_select').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_port_src').click(function (event) {
        $('#port_src_select').show();
        $('#port_src_input').hide();
        event.preventDefault();
    });

    $('#ip_dst_select').change(function(event) {
        if ($(this).val() === 'Entrez une ip') {
            $('#ip_dst_input').show();
            $('#ip_dst_select').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_ip_dst').click(function (event) {
        $('#ip_dst_select').show();
        $('#ip_dst_input').hide();
        event.preventDefault();
    });

    $('#port_dst_select').change(function(event) {
        if ($(this).val() === 'Entrez un port') {
            $('#port_dst_input').show();
            $('#port_dst_select').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_port_dst').click(function (event) {
        $('#port_dst_select').show();
        $('#port_dst_input').hide();
        event.preventDefault();
    });

    $('#select_creation_macro').change(function(event) {
        if ($(this).val() === 'port') {
            $('#creation_port_macro').show();
            $('#select_creation_macro').hide();
            event.preventDefault();
        } else if ($(this).val() === 'interface') {
            $('#creation_interface_macro').show();
            $('#select_creation_macro').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_creation_port_macro').click(function (event) {
        $('#select_creation_macro').show();
        $('#creation_port_macro').hide();
        event.preventDefault();
    });

    $('#cancel_creation_interface_macro').click(function (event) {
        $('#select_creation_macro').show();
        $('#creation_interface_macro').hide();
        event.preventDefault();
    });

    $('#select_contenu_macro').change(function(event) {
        if ($(this).val() === 'port') {
            $('#contenu_port_macro').show();
            $('#select_contenu_macro').hide();
            event.preventDefault();
        } else if ($(this).val() === 'interface') {
            $('#contenu_interface_macro').show();
            $('#select_contenu_macro').hide();
            event.preventDefault();
        }
    });
    
    $('#cancel_contenu_port_macro').click(function (event) {
        $('#select_contenu_macro').show();
        $('#contenu_port_macro').hide();
        event.preventDefault();
    });

    $('#cancel_contenu_interface_macro').click(function (event) {
        $('#select_contenu_macro').show();
        $('#contenu_interface_macro').hide();
        event.preventDefault();
    });
});