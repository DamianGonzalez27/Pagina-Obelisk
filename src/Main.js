import React, {Component} from 'react';
import ReactDOM from 'react-dom';

class Main extends Component
{
    render()
    {
        return (
            <div className="panel-citas">
                <div>Hola</div>
                <div>Test</div>
                <div>Test</div>
            </div>
        );
    }
}

export default Main;

if(document.getElementById('main'))
{
    ReactDOM.render(<Main />, document.getElementById('main'));
}