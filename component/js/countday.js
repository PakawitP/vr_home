
let Gt = new Date()
let t = new Date(Gt.getFullYear(), Gt.getMonth(), Gt.getDate())
let currentTime = t.getTime()


export const comPtime = (eventTime) => {
    if (eventTime <= currentTime) {
        return 'active'
    } else {
        // console.log("false")
        return ''
    }
}

export const countDay = (futTime) => {
    let CD = ~~((futTime - currentTime) / 86400000);
    console.log(CD)
    if (CD > 0) {
        return `${CD}  days left`
    } else if(CD == 0){
        return `today`
    }else if(CD < 0){
        return `${Math.abs(CD)}  days ago`
    }
}