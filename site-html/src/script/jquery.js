var JquerySpace;
(function (JquerySpace) {
    var $ = jQuery;
    $.fn.test = function (options) {
        if (this.length === 0) {
            console.log('Error!');
            return this;
        }
        console.log("options");
        return this;
    };
    $.fn.hasDataAttr = function (name) {
        return $(this)[0].hasAttribute('data-' + name);
    };
    $.fn.dataAttr = function (name, def) {
        if ($(this)[0] == undefined) {
            return def;
        }
        return $(this)[0].getAttribute('data-' + name) || def;
    };
    $.fn.outerHTML = function () {
        var html = '';
        this.each(function () {
            html += $(this).prop("outerHTML");
        });
        return html;
    };
    $.fn.fullHTML = function () {
        var html = '';
        $(this).each(function () {
            html += $(this).outerHTML();
        });
        return html;
    };
    $.fn.scrollToEnd = function () {
        $(this).scrollTop($(this).prop("scrollHeight"));
        return this;
    };
    JquerySpace.a = $;
})(JquerySpace || (JquerySpace = {}));
//# sourceMappingURL=jquery.js.map