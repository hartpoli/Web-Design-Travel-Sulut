function cariWisata() { 
        var input, filter, ul, li, a, i; // kita buatkan variabel input, filter, ul, li, a, i
        input = document.getElementById("pencarianWisata"); 
        filter = input.value.toUpperCase();
        ul = document.getElementById("menuWisata");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) { // kita buatkan looping untuk mencari semua element li pada ul
          a = li[i].getElementsByTagName("a")[0]; // kita buatkan variabel a untuk mengambil element a pada element li
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) { // kita buatkan if untuk mengecek apakah ada element a yang memiliki nilai yang sama dengan filter
            li[i].style.display = ""; // jika berhasil kita ambil variabel li untuk menampilkan ke dalam filternya nanti
          } else {
            li[i].style.display = "none"; // jika tidak kita ambil variabel li untuk menyembunyikan filternya nanti
          }
        }
      }