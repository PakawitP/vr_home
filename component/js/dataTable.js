//reuse  column in program


// $value = ['Code', 'SNo', 'Cap.date', 'Asset description', 'Invent. no', 'Quantity', 'Physical Count', 'Diff', 'Cost Center', 'Location', 'Location Description', 'Room', 'Status', 'Note', 'Date of Physical Count', 'Option']

export const columns = [ // colums assets full 
    {
        className: "text-center align-middle",
        data: function (data) {
            return data.Code.substring(0, 3);
        },
    },

    {
        className: "text-center align-middle",
        data: "Code"
    },
    {
        className: "text-center align-middle",
        data: "SNo"
    },
    {
        className: "text-center align-middle",
        data: "CapDate"
    },
    {
        className: "text-center align-middle",
        data: "Description"
    },
    {
        className: "text-center align-middle",
        data: "Remark"
    },
    {
        className: "text-center align-middle",
        data: "Quantity"
    },
    {
        className: "text-center align-middle",
        data: "PhysicalCount"
    },
    {
        className: "text-center align-middle",
        data: function (data) {
            if (data.PhysicalCount == '-') {
                return '-'
            } else {
                return data.Quantity - data.PhysicalCount;
            }
        },
        render: function (data, type, full, meta) {
            // return `<span data-toggle="tooltip" data-placement="bottom" title="${full.CostCtrCode.substring(0, 9) + "-" + full.CostCtr}">${data}</span>`;
            return `<span data-toggle="tooltip" data-placement="bottom" title="Quantity :  ${full.Quantity}    PhysicalCount : ${full.PhysicalCount}">${data}</span>`;

        }
    },
    {
        className: "text-center align-middle",
        data: function (data) {
            return data.CostCtr;
        },
        render: function (data, type, full, meta) {
            // return `<span data-toggle="tooltip" data-placement="bottom" title="${full.CostCtrCode.substring(0, 9) + "-" + full.CostCtr}">${data}</span>`;
            return `<span data-toggle="tooltip" data-placement="bottom" title="${full.CostCtrCode + "-" + full.CostCtr}">${full.CostCtrCode}</span>`;

        }
    },
    {
        className: "text-center align-middle",
        data: "LocationCode"
    },
    {
        className: "text-center align-middle",
        data: function (data) {
            return data.Location;
        },
        render: function (data, type, full, meta) {
            return `<span data-toggle="tooltip" data-placement="bottom" title="${full.LocationCode.substring(0, 7) + "-" + full.Location}">${data}</span>`;
        }
    },
    {
        className: "text-center align-middle",
        data: "Room"
    },
    // {
    //     className: "text-center align-middle",
    //     data: "SerialNumber"
    // },

    {
        className: "text-center align-middle",
        data: function (data) {
            if (data.StatusCode) {
                return data.StatusCode;
            } else {
                return '-'
            }
        },
        render: function (data, type, full, meta) {
            return `<span data-toggle="tooltip" data-placement="bottom" title="${full.StatusCode + "-" + full.StatusName}">${data}</span>`;
        }
    },
    {
        className: "text-center align-middle",
        data: "Note"
    },
    {
        className: "text-center align-middle",
        data: "checkDate"
    },
]


export const order = [ //order config
    [0, 'asc'],
    [2, 'asc']
]

export const columnDefs = [ // columnDefs show image
    {
        targets: 16,
        data: null,
        className: "text-center",
        defaultContent: `
            <button class="btn btn-outline-secondary btnHistory" style="margin: 3px 5px" title="History Status"><i class="fas fa-history"></i></button>
            <button class="btn btn-outline-primary btnPicture" style="margin: 3px 5px" title="Picture"><i class="fas fa-image"></i></button>
        `
    }
]

export const domSetting = "<'row'<'col-md-1'B><'col-md-6'l><'col-md-5'f>>" + "<'row'<'col-md-12'tr>>" + "<'row'<'col-md-5'i><'col-md-7'p>>"

export const button = (messageTop, filename) => {
    return [{
        extend: 'excel',
        text: 'Export Data',
        messageTop: messageTop,
        filename: filename,
    }]    // className: 'btn-sm btn-flat',
}
