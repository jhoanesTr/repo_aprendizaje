const footerTemplate = document.createElement('template');//Declaramos variable
footerTemplate.innerHTML = //Reemplaza el html por el nuevo
`<footer>
</footer>
<style>
</style>
`;
class Footer extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        const shadowRooT = this.attachShadow({ mode: 'close'});
    }
}
//Registro el elemento personalizado 'header-component'
customElements.define('footer-component', Footer)