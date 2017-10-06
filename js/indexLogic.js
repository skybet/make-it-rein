var race1firstPrev, race1secondPrev, race1thirdPrev, race2firstPrev, race2secondPrev, race2thirdPrev, race3firstPrev, race3secondPrev, race3thirdPrev;

$("#race1first").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race1firstPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race1firstPrev = value;
});

$("#race1second").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race1secondPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race1secondPrev = value;
});

$("#race1third").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race1thirdPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race1thirdPrev = value;
});

$("#race2first").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race2firstPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race2firstPrev = value;
});

$("#race2second").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race2secondPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race2secondPrev = value;
});

$("#race2third").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race2thirdPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race2thirdPrev = value;
});

$("#race3first").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race3firstPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race3firstPrev = value;
});

$("#race3second").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race3secondPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race3secondPrev = value;
});

$("#race3third").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race3thirdPrev + "']").show();
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").hide();
    race3thirdPrev = value;
});