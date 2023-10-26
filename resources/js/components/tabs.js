if( document.getElementsByClassName('custom-tab-item') ){
    let tabs = document.getElementsByClassName('custom-tab-item');
    for (let i =0; i< tabs.length; i++) {
        tabs[i].addEventListener('click', function(e) {
            let tabGroup = e.target.dataset.tabGroup;
            let tabId = e.target.dataset.tab;
            let currentTabGroup = document.querySelectorAll('[data-tab-group="' + tabGroup + '"]')
            for (let c =0; c< currentTabGroup.length; c++) {
                currentTabGroup[c].classList.remove('active');
            }
            e.target.classList.add('active');

            let currentTabContentBlock = document.getElementById(tabGroup +'-tabs-group');

            let currentTabContentBlocks = currentTabContentBlock.querySelectorAll('#' + tabGroup  + '-tabs-group > .tab-content-block');
     
            for (let c =0; c< currentTabContentBlocks.length; c++) {
                currentTabContentBlocks[c].classList.add('hidden');
            }
            currentTabContentBlock.querySelector('[data-tab-content="'+ tabId +'-tab"]').classList.remove('hidden');
            
        });
    }
}