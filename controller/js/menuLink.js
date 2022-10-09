


var table
$(() => {
    let partArr = (window.location.href.split("?_id_="))

    if(localStorage.getItem('link_data')){
        window.location.href = localStorage.getItem('link_data')
    }

    if (!$("a[href$='menuLink.php']").hasClass('active')) {
        $("a[href$='menuLink.php']").addClass('active')
    }

    table = $('#tbl').DataTable({
        ajax: {
            url: "../controller/php/manuLink.php",
            type: 'GET',
            data: {
                action: 'getmenuLink',
                type: partArr[partArr.length - 1]
            }
        },
        columns: [
            {
                className: "text-center align-middle",
                data: "No."
            },
            {
                className: "text-center align-middle",
                data: "Name"
            },
            {
                className: "text-center align-middle",
                data: "Description"
            },
            {
                className: "text-center align-middle",
                data: "CreateDate"
            },
        ],
        columnDefs: [
            {
                targets: 4,
                data: null,
                className: "text-center",
                defaultContent: `<button class="btn btn-outline-primary btnLink" style="margin: 3px 5px" title="Picture"><i class="fas fa-link"></i></button>`
            },
        ],
        order: [
            [0, 'asc'],
            [2, 'asc']
        ]
    })
  
    $('#tbl tbody').on('click', '.btnLink', function () {
        var data = table.row($(this).parents('tr')).data()
        localStorage.setItem('link_data', `${data.Link}`);
        window.location.href = `${data.Link}`
    })
    $('#tbl').closest('.row').addClass('table-responsive')
})