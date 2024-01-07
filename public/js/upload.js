import { html, Component, render } from '/js/htm.3.1.1.min.mjs';

class UploadForm extends Component {

  addFiles(event) {
    const { files = [ ] } = this.state;
    this.setState({ files: [...event.target.files] });
  }

  render({ page }, { files = [] }) {
    return html`
      <main>
        <article>
          <upload-box>
            <h1>Upload Files</h1>
            <h2>Drag files here or browse</h2>
            <form method="post" enctype="multipart/form-data">
              <label for="upload">
                <input
                  id="upload"
                  multiple="true"
                  name="upload"
                  type="file"
                  required="true"
                  />
              </label>
              <footer>
                <button>Upload</button>
              </footer>
            </form>
          </upload-box>
        </article>
      </main>
    `;
  }
}

render(html`<${UploadForm} />`, document.body);
