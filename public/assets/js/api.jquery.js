function floatToString(t, r) {
    var e = t.toFixed(r).toString();
    return e.match(/^\.\d+/) ? "0" + e : e
}

function attributeToString(t) {
    return "string" != typeof t && (t += "", "undefined" === t && (t = "")), jQuery.trim(t)
}

"undefined" == typeof osaweb && (osaweb = {});

osaweb.mediaDomainName = "//osaweb.dktcdn.net/";

osaweb.money_format = "${{amount}}", osaweb.onError = function (XMLHttpRequest, textStatus) {
    var data = eval("(" + XMLHttpRequest.responseText + ")");
    alert(data.message ? data.message + "(" + data.status + "): " + data.description : "Error : " + osaweb.fullMessagesFromErrors(data).join("; ") + ".")
}, osaweb.fullMessagesFromErrors = function (t) {
    var r = [];
    return jQuery.each(t, function (t, e) {
        jQuery.each(e, function (e, o) {
            r.push(t + " " + o)
        })
    }), r
}, osaweb.formatMoney = function (amount, moneyFormat) {
    function getDefault(value, defaultValue) {
        if (typeof value == "undefined")
            return defaultValue;

        return value;
    }

    function formatMoney(amount, decimal, thousandSeperate, decimalSeperate) {
        decimal = getDefault(decimal, 2);
        thousandSeperate = getDefault(thousandSeperate, ",");
        decimalSeperate = getDefault(decimalSeperate, ".");

        if (isNaN(amount) || null == amount)
            return 0;

        amount = amount.toFixed(decimal);

        var amountParts = amount.split(".");
        var integer = amountParts[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + thousandSeperate);
        var decimal = amountParts[1] ? decimalSeperate + amountParts[1] : "";

        return integer + decimal;
    }

    if (typeof amount == "string") {
        amount = amount.replace(".", "");
        amount = amount.replace(",", "");
    }

    var result = "";
    var moneyRegex = /\{\{\s*(\w+)\s*\}\}/;

    moneyFormat = moneyFormat || this.money_format;
    switch (moneyFormat.match(moneyRegex)[1]) {
        case "amount":
            result = formatMoney(amount, 2);
            break;
        case "amount_no_decimals":
            result = formatMoney(amount, 0);
            break;
        case "amount_with_comma_separator":
            result = formatMoney(amount, 2, ".", ",");
            break;
        case "amount_no_decimals_with_comma_separator":
            result = formatMoney(amount, 0, ".", ",")
    }

    return moneyFormat.replace(moneyRegex, result)
}, osaweb.resizeImage = function (t, r) {
    try {
        if ("original" == r)
            return t;

        var thumbDomain = osaweb.mediaDomainName + "thumb/" + r + "/";
        return t.replace(osaweb.mediaDomainName, thumbDomain).split('?')[0];
    } catch (o) {
        return t
    }
}, jQuery.fn.jquery >= "1.4" ? osaweb.param = jQuery.param : (osaweb.param = function (t) {
    var r = [],
        e = function (t, e) {
            e = jQuery.isFunction(e) ? e() : e, r[r.length] = encodeURIComponent(t) + "=" + encodeURIComponent(e)
        };
    if (jQuery.isArray(t) || t.jquery) jQuery.each(t, function () {
        e(this.name, this.value)
    });
    else
        for (var o in t) osaweb.buildParams(o, t[o], e);
    return r.join("&").replace(/%20/g, "+")
}, osaweb.buildParams = function (t, r, e) {
    jQuery.isArray(r) && r.length ? jQuery.each(r, function (r, o) {
        rbracket.test(t) ? e(t, o) : osaweb.buildParams(t + "[" + ("object" == typeof o || jQuery.isArray(o) ? r : "") + "]", o, e)
    }) : null != r && "object" == typeof r ? osaweb.isEmptyObject(r) ? e(t, "") : jQuery.each(r, function (r, o) {
        osaweb.buildParams(t + "[" + r + "]", o, e)
    }) : e(t, r)
}, osaweb.isEmptyObject = function (t) {
    for (var r in t) return !1;
    return !0
});