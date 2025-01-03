const form = document.getElementById('form');

function handleSubmit (e) {
    e.preventDefault();
    const data = {};
    const regExPhoneSkype = new RegExp("(\\+?\\d{1,3}[\\-.\\s]?\\(?\\d{1,4}\\)?[\\-.\\s]?\\d{1,4}[\\-.\\s]?\\d{1,4}[\\-.\\s]?\\d{1,4})|([a-zA-Z][a-zA-Z0-9.,_\\-]{5,31})");
    const regExEmail = new RegExp("[a-z0-9._%+\\-]+@[a-z0-9.\\-]+\\.[a-z]{2,}$");

    for (const el of e.target) {
        if(el.checked){
            data[el.name] = el.value;
        }

        if(el.value.trim().length > 0 ){
            switch (el.name) {
                case 'user_name':
                    data[el.name] = el.value.trim();
                    break;

                case 'user_phone':

                    if(regExPhoneSkype.test(el.value.trim())){
                        data[el.name] = el.value.trim();
                    } else {
                        alert('Invalid phone format');
                    }

                    break;

                case 'user_email':

                    if(regExEmail.test(el.value.trim())){
                        data[el.name] = el.value.trim();
                    } else {
                        alert('Invalid email format');
                    }

                    break;

                case 'required_function':
                    data[el.name] = el.value.trim();
                    break;

                case 'site_theme':
                    data[el.name] = el.value.trim();
                    break;

                default:
                    break;
            }
        }
    }

    console.log(data);
}

form.addEventListener('submit', handleSubmit);