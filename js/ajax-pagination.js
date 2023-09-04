function loadCatalogPage(pageNumber) {
    $.ajax({
      url: '../funtions.php',
      type: 'POST',
      data: { page: pageNumber },
      success: function(response) {
        $('.catalog__body').html(response);
      },
      error: function() {
        console.log('Ошибка при загрузке страницы каталога');
      }
    });
  }
  