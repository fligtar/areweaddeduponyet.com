function selectQuarter(a) {
    $(a).closest('.initiatives').attr('class', 'initiatives selected-' + $(a).attr('class'));
    return false;
}

function selectView(a) {
    $(a).closest('section').attr('class', 'selected-' + $(a).attr('class'));
    return false;
}