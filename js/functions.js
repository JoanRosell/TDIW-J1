$(document).ready(function () {
    const body = $("body");
    const mainSection = $("#mainSection");

    body.on("click", ".categoryRef", function (event) {
        let selection = $(this);
        loadProductPreviews(selection.attr('id'));
        event.preventDefault();
    });

    function loadProductPreviews(categoryID) {
        addClass(mainSection, '.grid-container');
        mainSection.load("controller/listProductPreviews.php?categoryID=" + categoryID);
    }

    function addClass(element, classToAdd) {
        if (!element.hasClass(classToAdd))
            element.addClass(classToAdd);
    }

    body.on('click', ".productRef", function (event) {
        let selection = $(this);
        loadProductDetail(selection.attr('id'));
        event.preventDefault();
    });

    function loadProductDetail(productID) {
        removeClass(mainSection, '.grid-container');
        mainSection.load("/getProductDetail.php?productID=" + productID);
    }

    function removeClass(element, classToRemove) {
        if (element.hasClass(classToRemove))
            element.removeClass(classToRemove);
    }

    $("#asideMenuOpenButton").click(function () {
        $("#asideMenu").width("20%");
    });

    $("#asideMenuCloseButton").click(function () {
        $("#asideMenu").width(0);
    });
});