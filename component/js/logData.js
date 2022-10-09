const checkNull = (data) => {
    if(data){
        return data
    }
    return '-'
}


export const LogFacth = (id,Sup) => {

    $.ajax({
        url: '../controller/php/assetsData.php',
        type: 'GET',
        data: {
            action: 'getLog',
            Code: id
        },
        success: json => {
            $('#logShow').html('')
            let textShow = ''
            const obj = JSON.parse(json)
            textShow = textShow +
                `<thead>
                    <tr>
                        <th scope="col" class="text-center align-middle">#</th>
                        <th scope="col" class="text-center align-middle">Status</th>
                        <th scope="col" class="text-center align-middle">Quantity</th>
                        <th scope="col" class="text-center align-middle">PhysicalCount</th>
                        <th scope="col" class="text-center align-middle">Date</th>
                    </tr>
                </thead>
                <tbody>
                    `
            if (obj.data.length > 0) {
                obj.data.forEach((item, key) => {
                    textShow = textShow +
                        `
                            <tr value=${item.id}>
                                <td class = "text-center align-middle">${key + 1}</td>
                                <td class = "text-center align-middle">${checkNull(item.StatusCode)} - ${checkNull(item.Status)}</td>
                                <td class = "text-center align-middle">${checkNull(item.Quantity)}</td>
                                <td class = "text-center align-middle">${checkNull(item.PhysicalCount)}</td>
                                <td class = "text-center align-middle">${item.CreateDate ? item.CreateDate:createSup}</td>
                            </tr>
                        `
                });
                textShow = textShow + `</tbody>`
            } else {
                textShow = textShow +
                `
                    <tr value= 1>
                        <td class = "text-center align-middle">1</td>
                        <td class = "text-center align-middle">${Sup.status}</td>
                        <td class = "text-center align-middle"> - </td>
                        <td class = "text-center align-middle"> - </td>
                        <td class = "text-center align-middle">${Sup.date}</td>
                    </tr></tbody>
                `
            }
            $("#logShow").append(textShow);
        }
    })
}