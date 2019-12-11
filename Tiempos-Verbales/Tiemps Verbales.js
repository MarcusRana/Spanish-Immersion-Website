// function OpenTab1() {
//     var Tabs = document.getElementById("Tab1");
//     Tabs.style.color = "green";
// }

// function OpenTab2() {
//     var Tabs = document.getElementById("Tab2");
//     Tabs.style.color = "green";
// }

// function OpenTab3() {
//     var Tabs = document.getElementById("Tab3");
//     Tabs.style.color = "green";
// }

// function OpenTab4() {
//     var Tabs = document.getElementById("Tab4");
//     Tabs.style.color = "green";
//     Tabs.TEXT_NODE
// }

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-target]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
        })
        target.classList.add('active')
    })
})