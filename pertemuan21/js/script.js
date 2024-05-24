$(document).ready(function () {

    //* hilangkan tombol cari
    $('#tombol-cari').hide()

    //* event ketika keyword ditulis
    $('#keyword').on('keyup', function () {

        //* munculkan icon loading
        $('.loader').show()

        //* ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val())

        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {

            $('#container').html(data)
            $('.loader').hide()
        })

    })

})


//* cara 2

// $(document).ready(function () {
//     const $loader = $('.loader');
//     const $container = $('#container');
//     const $keyword = $('#keyword');
//     const $tombolCari = $('#tombol-cari');

//     $tombolCari.hide();

//     $keyword.on('keyup', function () {
//         $loader.show();

//         $.get('ajax/mahasiswa.php', { keyword: $keyword.val() })
//             .done(function (data) {
//                 $container.html(data);
//                 $loader.hide();
//             });
//     });
// });
