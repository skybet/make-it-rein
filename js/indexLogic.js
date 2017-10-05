var race1firstTemp, race1secondTemp, race1thirdTemp;

$("#race1first").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race1second").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race1third").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race2first").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race2second").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race2third").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race3first").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race3second").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});

$("#race3third").change(function() {
    $("option[value='" + $(this).val() + "']").prop('disabled', true);
});