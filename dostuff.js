function selectQuarter(a) {
    $('.initiatives').attr('class', 'initiatives selected-' + $(a).attr('class'));
    return false;
}

function selectView(a) {
    $('#content > section').attr('class', 'selected-' + $(a).attr('class'));
    return false;
}