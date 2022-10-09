
//เกี่ยวกับสี


export const setBg = () => { // random รหัสสี
    const randomColor = Math.floor(Math.random() * 16777215).toString(16);
    return ('#' + randomColor) // #FFFFFF
}

export const hexToRgb = (hex) => // เปลี่ยนรหัสสีจาก Hex เป็น RGB รับ #FFFFFF

    hex.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i
        , (m, r, g, b) => '#' + r + r + g + g + b + b)
        .substring(1).match(/.{2}/g)
        .map(x => parseInt(x, 16)) 


export function getRandomRgb(type) { //random RGB 
    var num = Math.round(0xffffff * Math.random());
    var r = num >> 16;
    var g = num >> 8 & 255;
    var b = num & 255;
    if (type === 'string') {
        return 'rgb(' + r + ', ' + g + ', ' + b + ')'; //rgb(1,1,1)
    }
    else if(type == 'rgba'){
        // 'rgba(' + r + ', ' + g + ', ' + b + '0.6' +')' //rgb(1,1,1,1)
        return `rgba(${r},${g},${b},1)`
    } else {
        return [r, g, b]; //[1,1,1]
    }
}


export const UnverifiedColer = { //กำหนดสี chart ที่ยังไม่ประเมิน
    b : 'rgba(220, 171, 161,1)',
    h : 'rgba(220, 171, 161,1)'
} 


export let coler = { //กำหนดสี chart เป็น HEX
    bColer: ["#46BFBD", "#F7464A", "#FDB45C", "#949FB1", "#4D5360"],
    hcoler: ["#46BFBD", "#F7464A", "#FDB45C", "#949FB1", "#4D5360"],
    // hcoler: ["#5AD3D1", "#FF5A5E", "#FFC870", "#A8B3C5", "#616774"]
}
export let colerRGBA = { //กำหนดสี chart เป็น rgba
    bColer: ['rgba(70,191,189,1)', 'rgba(247,70,74,1)', 'rgba(253,180,92,1)', 'rgba(148,159,177,1)', 'rgba(77,83,96,1)'],
    hcoler: ['rgba(90,211,209,0.6)', 'rgba(255,90,94,0.6)', 'rgba(255,200,112,0.6)', 'rgba(168,179,197,0.6)', 'rgba(97,103,116,0.6)']
}

export function rgba2hex(color) { //rgba to hex
    const rgba = color.replace(/^rgba?\(|\s+|\)$/g, '').split(',');
    const hex = `#${((1 << 24) + (parseInt(rgba[0]) << 16) + (parseInt(rgba[1]) << 8) + parseInt(rgba[2])).toString(16).slice(1)}`;
    return hex; //#FFFFFF
}

export const rgbTorgba = (colerArr, a) => { // rgb to rgba
    let temp = []
    colerArr.forEach((coler) => {
        temp.push(`rgba(${coler[0]},${coler[1]},${coler[2]},${a})`)
    })
    return temp //[rgba(),rgba(),rgba()]
}

// export const colerPieChart = () => { 
//     let RGB = getRandomRgb('array')
//     console.log(rgbTorgba([RGB], 1))
//     console.log(rgbTorgba([RGB], 0.6))
//     let b = rgbTorgba([RGB], 1)
//     b =  b[b-b.length]
//     let h = rgbTorgba([RGB], 0.6)
//     h =  h[h-h.length]
//     let bAhColer = {
//         bcoler: rgba2hex(b),
//         hcoler: rgba2hex(h)
//     }
//     return bAhColer;
// }

