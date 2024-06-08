// // import React from 'react';
// import ReactDOM from 'react-dom';
// import App from './app'; // あなたのReactコンポーネント


// // formのselectのoptionの値が変更されるたびにAjaxを実行するには、
// // onChange イベントを利用して、選択肢が変更されたときにAjaxリクエストを送信することが一般的です。以下は、Reactを使用した例です。
// // まず、useState フックを使用して選択されたオプションの値を管理し、useEffect フックを使用してAjaxリクエストを送信します。

// import React, { useState, useEffect } from 'react';
// import axios from 'axios';

// const YourComponent = () => {
//   const [selectedValue, setSelectedValue] = useState('');
//   const [data, setData] = useState([]);

//   useEffect(() => {
//     // 選択された値が変更されるたびにAjaxリクエストを送信
//     const fetchData = async () => {
//       try {
//         const response = await axios.get(`https://api.example.com/data?selectedValue=${selectedValue}`);
//         setData(response.data);
//       } catch (error) {
//         console.error('エラーが発生しました', error);
//       }
//     };

//     fetchData();
//   }, [selectedValue]); // selectedValueが変更されたときに再実行

//   const handleSelectChange = (event) => {
//     // 選択された値が変更されたらstateを更新
//     setSelectedValue(event.target.value);
//   };

//   return (
//     <div>
//       <select value={selectedValue} onChange={handleSelectChange}>
//         <option value="1">Option 1</option>
//         <option value="2">Option 2</option>
//         <option value="3">Option 3</option>
//       </select>

//       {data.map((item) => (
//         <div key={item.id}>
//           {/* データを表示するためのコンポーネントを追加 */}
//           <p>{item.someProperty}</p>
//         </div>
//       ))}
//     </div>
//   );
// };

// export default YourComponent;
// // この例では、selectedValue の変更を検知して、それに基づいてAjaxリクエストを送信しています。
// // useEffect フックの第二引数に selectedValue を指定することで、この値が変更されたときに再実行されるようになります。

// ReactDOM.render(<App />, document.getElementById('react-root'));