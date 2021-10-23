$(function() {

    var $input = $("input[type='search']"),
      $prevBtn = $("button[data-search='prev']"),
      $nextBtn = $("button[data-search='next']"),
      $content = $("body"),
      $results,
      currentClass = "current",
      offsetTop = 50,
      currentIndex = 0;
  

     //Saltar para o elemento correspondente ao currentIndex

    function jumpTo() {
      if ($results.length) {
        var position,
          $current = $results.eq(currentIndex);
        $results.removeClass(currentClass);
        if ($current.length) {
          $current.addClass(currentClass);
          position = $current.offset().top - offsetTop;
          window.scrollTo(0, position);
        }
      }
    }
  
    //Procurar a palavra-chave inserida no
    //contexto especificado na entrada

    $input.on("input", function() {
        var searchVal = this.value;
      $content.unmark({
        done: function() {
          $content.mark(searchVal, {
            separateWordSearch: true,
            done: function() {
              $results = $content.find("mark");
              currentIndex = 0;
              jumpTo();
            }
          });
        }
      });
    });
    //Salto para a pesquisa seguinte e anterior
 
    $nextBtn.add($prevBtn).on("click", function() {
      if ($results.length) {
        currentIndex += $(this).is($prevBtn) ? -1 : 1;
        if (currentIndex < 0) {
          currentIndex = $results.length - 1;
        }
        if (currentIndex > $results.length - 1) {
          currentIndex = 0;
        }
        jumpTo();
      }
    });
  });