function CreateNode(Element) 
    {
        return document.createElement(Element);
    }

function append(Parent , Ele)
    {
        return Parent.appendChild(Ele);
    }

function onFetch()
{
    let token = '9c90c28fda19fddf5f80376c4840d87f415d48b5'
    let identifier = document.form3.txtName3.value
    fetch(`https://resume-parser.affinda.com/public/api/v1/documents/${identifier}`,
        {
            method: 'GET',
            headers: 
            {
                'Authorization': `Bearer ${token}`,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
        }).then(r => r.json()).then(function(data)
        {
            const ul = document.getElementById('FetchData');
            //console.log(data);
            let FetchDataName = data.data.name;
            console.log(FetchDataName);
            let li = CreateNode('li');
            //let img = CreateNode('img');
            let span = CreateNode('span');
        
            //img.src = FetchData.picture.medium;
            span.innerHTML = `${FetchDataName.first} ${FetchDataName.last}`
            //append(li,img)
            append(li,span)
            append(ul,li);
            
        })
}