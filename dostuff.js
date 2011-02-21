function selectQuarter(a) {
    $(a).closest('.initiatives').attr('class', 'initiatives selected-' + $(a).attr('class'));
    return false;
}