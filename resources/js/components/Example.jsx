import React, { useState } from 'react';

const DynamicTable = () => {
  const [columns, setColumns] = useState(['Column 1', 'Column 2']);

  const addColumn = async () => {
    // 非同期処理の模擬（実際にはAPIなどからデータを取得することが一般的）
    await new Promise((resolve) => setTimeout(resolve, 1000));

    // 新しいカラムを追加
    const newColumn = `Column ${columns.length + 1}`;
    setColumns([...columns, newColumn]);
  };

  return (
    <div>
      <button onClick={addColumn}>Add Column</button>
      <table>
        <thead>
          <tr>
            {columns.map((column, index) => (
              <th key={index}>{column}</th>
            ))}
          </tr>
        </thead>
        <tbody>
          {/* テーブルのデータ表示部分 */}
        </tbody>
      </table>
    </div>
  );
};

export default DynamicTable;