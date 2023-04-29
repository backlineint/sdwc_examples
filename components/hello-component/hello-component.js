import {LitElement, html} from 'https://cdn.jsdelivr.net/gh/lit/dist@2/core/lit-core.min.js';

class HelloComponent extends LitElement {
  render() {
    return html`<p>Hello from hello-component</p>`;
  }
}
customElements.define('hello-component', HelloComponent);