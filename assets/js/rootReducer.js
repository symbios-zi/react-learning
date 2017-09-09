import { combineReducers } from 'redux';

import FlashMessages from './Reducers/FlashMessages';
import Auth from './Reducers/Auth';

export default combineReducers({
    FlashMessages,
    Auth
});