const headerTemplate = document.createElement('template');//Declaramos variable
headerTemplate.innerHTML = //Reemplaza el html por el nuevo
`<header>
</header>
<style>
</style>
`;
class Header extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        const shadowRooT = this.attachShadow({ mode: 'close'});
    }
}
//Registro el elemento personalizado 'header-component'
customElements.define('header-component', Header)