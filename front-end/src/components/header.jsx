import React, { Component } from 'react';
import axios from 'axios';
import API_URL from '../utils/API';

const API_END_POINT = 'topmessage';

class Header extends Component {
  constructor(props) {
    super(props);

    this.state = {};
  }

  componentWillMount() {
    const self = this;

    axios({
      method: 'get',
      url: API_URL + API_END_POINT
    }).then(response => {
      let data = response.data[0];
      self.setState({
        title: data.title.rendered,
        reactLogo: data.acf.img1.sizes.medium,
        wpLogo: data.acf.img2.sizes.medium
      });
    }).catch(error => console.log(error));
    
  }

  render() {
    
    const {title, reactLogo, wpLogo} = this.state;

    return (
      <header className='app-header'>
        <div className='header-logo'>
          <div 
            className='logo-react'
            style={{backgroundImage:`url(${reactLogo})`}}
          ></div>
          <div 
            className='logo-wp'
            style={{backgroundImage:`url(${wpLogo})`}}
          ></div>
        </div>
        <div className='top-message'>
          <span>
            {title}
          </span>
        </div>
      </header>
    );
  }
}

export default Header;