
var personnelMap = new Map([]);

function addPerson () {
    
    firstNameInput = document.getElementById('firstNameInput').value;
    lastNameInput = document.getElementById('lastNameInput').value;

    personnelMap.set(firstNameInput, lastNameInput);

    personnelTableAppend = document.getElementById('personnelTable');

    if (personnelMap.size <= 1) {
        var addedMessage = 'Person Added';
    } else {
        addedMessage = 'People Added'
    }

    document.getElementById("personnelVariables").innerHTML = `${personnelMap.size} ${addedMessage}`;

    if (personnelMap.size != 0) {
        $( personnelAlert ).removeClass( "d-none" ).addClass( "d-flex" );
    }

    makePersonList();

    console.log(personnelMap);
}

function makePersonList() {

    const iterator1 = personnelMap.keys();
    const iterator2 = personnelMap.values();

    const personnelList = document.getElementById('personnelList');

    if (personnelMap.size >= 1) {
        $( ".list-group-item" ).remove();
    }
    
    function personnelMapList() {

        $( personnelList ).append( '<li class="list-group-item">' + iterator1.next().value + ' ' + iterator2.next().value + '</li>' );
    }

    personnelMap.forEach(personnelMapList);

    console.log("List added");
    
}

