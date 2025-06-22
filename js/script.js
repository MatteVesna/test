function showSubcategories() {
    var sportSelect = document.getElementById('sportSelect');
    var categorySelect = document.getElementById('categorySelect');
    var selectedSport = sportSelect.value;
    categorySelect.innerHTML = '';
    if (sportCategories[selectedSport]) {
        sportCategories[selectedSport].forEach(function(cat) {
            var option = document.createElement('option');
            option.value = cat;
            option.textContent = cat;
            categorySelect.appendChild(option);
        });
    } else {
        var option = document.createElement('option');
        option.value = '';
        option.textContent = 'Seleziona sport prima';
        categorySelect.appendChild(option);
    }
    categorySelect.classList.add('fade-in');
    setTimeout(function() { categorySelect.classList.remove('fade-in'); }, 500);
}
