$(() => {
    let partArr = (window.location.href.split("?_id_="))
    console.log(0)
    if(partArr.length >= 4 && partArr[partArr.length - 2] == 'true'){
        console.log(1)
        localStorage.removeItem(`link_data_${partArr[partArr.length - 3]}`)
        window.location.href = `./menuLink.php`
    }
    else if(localStorage.getItem(`link_data_${partArr[partArr.length - 3]}`)){
        console.log(2)
        window.location.href = localStorage.getItem(`link_data_${partArr[partArr.length - 3]}`)
    }else{
        console.log(3)
        window.location.href = `./menuLink.php`
    }
})