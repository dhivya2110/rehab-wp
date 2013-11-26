function gformCalculatePrice(formId){
    var price = parseFloat(jQuery(".gfield_price_" + formId + " .ginput_base_price").val());
    if(!isNumber(price))
        price = 0;

    jQuery(".gfield_option_" + formId + " input:checked").each(function(){
        price += gformGetPrice(jQuery(this).val());
    });

    jQuery(".gfield_option_" + formId + " select").each(function(){
        price += gformGetPrice(jQuery(this).val());
    });

    var quantityElement = jQuery(".gfield_quantity_" + formId);
    var quantity = quantityElement.find("input").length > 0 ? parseFloat(quantityElement.find("input").val()) : parseFloat(quantityElement.find("select").val());
    if(!isNumber(quantity))
        quantity = 1;

    price = price * quantity;
    price = Math.round(price * 100) / 100;
    var priceElement = jQuery(".ginput_price_" + formId);
    priceElement.html(moneyFormat(price));
    priceElement.next().val(price);

}

function moneyFormat(price){
    return "$" + price;
}

function gformGetPrice(text){
    var val = text.split("|");
    if(val.length > 1 && isNumber(val[1]))
        return parseFloat(val[1]);

    return 0;
}

function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function gformIndexOf(ary, item){
    for(var i=0; i<ary.length; i++)
        if(ary[i] == item)
            return i;

    return -1;
}

function gformGetFormId(parent_class, element){
    var classes = jQuery(element).hasClass(parent_class) ? jQuery(element).attr("class").split(" ") : jQuery(element).parents("." + parent_class).attr("class").split(" ");
    for(var i=0; i<classes.length; i++){
        if(classes[i].substr(0, parent_class.length) == parent_class && classes[i] != parent_class)
            return classes[i].split("_")[2];
    }
    return -1;
}

jQuery(document).ready(function(){

    var forms = new Array();
    jQuery(".gfield_option").each(function(){

       var formId = gformGetFormId("gfield_option", this);
       if(gformIndexOf(forms, formId) == -1)
            forms.push(formId);

       jQuery(this).find("input").click(function(){
           var formId = gformGetFormId("gfield_option", this);
           gformCalculatePrice(formId);
       });

       jQuery(this).find("select").change(function(){
           var formId = gformGetFormId("gfield_option", this);
           gformCalculatePrice(formId);
       });

    });

    jQuery(".gfield_quantity").each(function(){

        var formId = gformGetFormId("gfield_quantity", this);
        if(gformIndexOf(forms, formId) == -1)
            forms.push(formId);

        jQuery(this).find("input").change(function(){
            var formId = gformGetFormId("gfield_quantity",this);
            gformCalculatePrice(formId);
        });

         jQuery(this).find("select").change(function(){
            var formId = gformGetFormId("gfield_quantity",this);
            gformCalculatePrice(formId);
        });
    });

    for(var i=0; i< forms.length; i++)
        gformCalculatePrice(forms[i]);




});