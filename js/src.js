"use strict";
$(document).ready(function () {
    const body = $("body");
    const mainSection = $("#mainSection");

    body.on("click", ".categoryRef", function (event) {
        let selection = $(this);
        loadProductPreviews(selection.attr('id'));
        event.preventDefault();
    });

    function loadProductPreviews(categoryID) {
        if (!mainSection.hasClass('grid-container')) {
            mainSection.removeClass();
            mainSection.addClass('grid-container');
        }

        mainSection.load("controller/controller_listProductPreviews.php?categoryID=" + categoryID);
    }

    body.on("click", ".productRef", function (event) {
        let selection = $(this);
        loadProductDetail(selection.attr('id'));
        event.preventDefault();
    });

    function loadProductDetail(productID) {
        removeClass(mainSection, 'grid-container');
        mainSection.load("controller/controller_productDetail.php?productID=" + productID);
    }

    function removeClass(element, classToRemove) {
        if (element.hasClass(classToRemove))
            element.removeClass(classToRemove);
    }

    body.on('click', '#addToCart', function (event) {
        let selection = $(this);
        addProductToCart(selection.data("product-id"));
        event.preventDefault();
    });

    function addProductToCart(productID) {
        console.log("Adding product " + productID + " to cart...");
        let responseDiv =  $("#cartResponse");

        $.getJSON("/index.php", {action: "addToCart", pID: productID})
            .done(function (data) {
                responseDiv.html(data.message);

                if (data.totalUnits === 1) {
                    let cartMenu = $("#cartMenu");
                    cartMenu.append("<li id=\"totalUnitsDisplay\" class=\"grid-item\">Products: " + data.totalUnits + "</li>");
                    cartMenu.append("<li id=\"totalPriceDisplay\" class=\"grid-item\">Total: " + data.totalPrice + "&euro;</li>");
                } else {
                    $("#totalUnitsDisplay").html("Products: " + data.totalUnits);
                    $("#totalPriceDisplay").html("Total: " + data.totalPrice + "&euro;");
                }

                console.log("Request served successfully.");
            })
            .fail(function (jqxhr, textStatus, error) {
                let errorMessage = textStatus + ", " + error;
                console.warn("Request Failed: " + errorMessage);
                console.warn(jqxhr.responseText);
                responseDiv.html('<strong>A connection error has occurred.</strong>');
            })
            .always(function () {
                console.log("Request performed.");
            });
        console.log("Making AJAX request to the server...");
    }

    $("#asideMenuOpenButton").click(function () {
        $("#asideMenu").width("20%");
    });

    $("#asideMenuCloseButton").click(function () {
        $("#asideMenu").width(0);
    });

    $("#cartOpenButton").click(function () {
        window.location.href = "/index.php?action=cartDetail";
    });

    body.on('click', '#makePurchaseButton',function () {
        window.location.href = "";
    });

    let newPassword = $("#passw");
    let confirmPassword = $("#repPassw");

    function validatePassword() {
        if(newPassword.val() !== confirmPassword.val()) {
            confirmPassword[0].setCustomValidity("Passwords don't match");
        } else {
            confirmPassword[0].setCustomValidity('');
        }
    }

    newPassword.change(validatePassword);
    confirmPassword.keyup(validatePassword);
});