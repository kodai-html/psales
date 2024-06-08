import React, { useState, useEffect } from 'react';

const UserComponent = ({ username }) => {
  const [userData, setUserData] = useState(null);

  useEffect(() => {
    // 非同期処理の実行
    const fetchData = async () => {
      try {
        const response = await fetch(`https://api.github.com/users/${username}`);
        const data = await response.json();
        setUserData(data);
      } catch (error) {
        console.error('Error fetching user data:', error);
      }
    };

    fetchData(); // 非同期処理を実行

  }, [username]); // usernameが変更されるたびに再実行

  return (
    <div>
      {userData ? (
        <div>
          <h2>{userData.login}</h2>
          <p>{userData.bio}</p>
          <p>Followers: {userData.followers}</p>
        </div>
      ) : (
        <p>Loading user data...</p>
      )}
    </div>
  );
};