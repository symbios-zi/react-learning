import axios from 'axios';

export function addTask(userData) {
    return dispatch => {
        return axios.post('/api/v1/tasks', userData);
    }
}