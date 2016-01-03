/**
 * Created by Alejandro on 27/12/2015.
 */
(function (namespace, $) {
    "use strict";

    var BackendJA = function () {
        // Create reference to this instance
        var o = this;
        // Initialize app when document is ready
        $(document).ready(function () {
            o.inicializar();
        });

    };
    var p = BackendJA.prototype;

    // =========================================================================
    // INIT
    // =========================================================================

    p.inicializar = function () {
        this._initEditoresTexto();
        this._enviarFormularios();
        this._cerrarSesion();
    };

    // =========================================================================
    // EDITORES TEXTO | SUMMERNOTE
    // =========================================================================
    p._initEditoresTexto = function () {
        if (!$.isFunction($.fn.summernote)) {
            return;
        }

        // Full toolbar
        $('#japaginas-contenido').summernote();
    };

    // =========================================================================
    // ENVIAR FORMULARIOS | PORTADA
    // =========================================================================
    p._enviarFormularios = function () {
        var formulario = $('.enviarForm');
        var boton = $("#enviarForm");

        if (formulario.length) {
            boton.click( function() {
                formulario.trigger('submit');
            });
        }
    };

    // =========================================================================
    // CERRAR SESIÓN | PORTADA
    // =========================================================================
    p._cerrarSesion = function () {
        var enlace = $('#cerrarSesion');

        if (enlace.length) {
            enlace.click( function() {
                $.post(enlace.data('url'));
            });
        }
    };



    namespace.BackendJA = new BackendJA;
}(this.materialadmin, jQuery)); // pass in (namespace, jQuery):
