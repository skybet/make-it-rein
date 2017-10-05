var race1firstPrev, race1secondPrev, race1thirdPrev, race2firstPrev, race2secondPrev, race2thirdPrev, race3firstPrev, race3secondPrev, race3thirdPrev;

$("#race1first").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race1firstPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race1firstPrev = value;
});

$("#race1second").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race1secondPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race1secondPrev = value;
});

$("#race1third").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race1thirdPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race1thirdPrev = value;
});

$("#race2first").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race2firstPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race2firstPrev = value;
});

$("#race2second").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race2secondPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race2secondPrev = value;
});

$("#race2third").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race2thirdPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race2thirdPrev = value;
});

$("#race3first").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race3firstPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race3firstPrev = value;
});

$("#race3second").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race3secondPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race3secondPrev = value;
});

$("#race3third").change(function() {
    var value = $(this).val();
    try {
        $("option[value='" + race3thirdPrev + "']").prop('disabled', false);
    } catch (error) {
        //Do nothing
    }
    $("option[value='" + value + "']").prop('disabled', true);
    race3thirdPrev = value;
});