package main

import (
	"fmt"
	"math/rand"
	"time"
)

/**
戦士構造体 Warrior の定義
フィールド
name  キャラクタ名（型 string）
life  生命エネルギー（型 int）
ch    送受信チャンネル（型 chan int）
*/

// Warrior 構造体
type Warrior struct {
	name string
	life int
	ch   chan int
}

/**
攻撃メソッドの定義
メソッド名：sendAtack
レシーバ：Warrior構造体のポインタ
引数：enemy  攻撃対象の名前（型 string）
処理
０から９までの乱数を生成する
乱数を送信チャンネル ch に送信する
攻撃により、生命エネルギーを１減らす
攻撃の状況を表示する
攻撃による自分の状況を表示する
１秒停止する
戻り値：なし
*/

func (x *Warrior) sendAtack(enemy string) {
	randNum := rand.Intn(10)
	x.life--
	fmt.Printf("「%s」は攻撃による反動で1ダメージ受けた\n", x.name)
	fmt.Printf("現在の「%s」のライフ「%d」\n", x.name, x.life)
	fmt.Println("")
	x.ch <- randNum
}

/**
攻撃受信メソッドの定義
メソッド名：receiveAtack
レシーバ：Warrior構造体のポインタ
引数：enemy 相手の名前（型 string）
処理：
受信チャンネルより攻撃を受信する
生命エネルギーより受けた攻撃の量を引く
攻撃を受けた状況を表示する
生命エネルギーの量を表示する
１秒停止
もし　生命エネルギーが０より小さいなら
false を返す
true を返す
戻り値：trueまたはfalse（型 bool）
*/

func (x *Warrior) receiveAttack(enemy string) bool {
	enemyAtkNum := <-x.ch
	x.life -= enemyAtkNum
	fmt.Printf("「%s」による攻撃で「%d」ダメージ\n", enemy, enemyAtkNum)
	fmt.Printf("現在の「%s」のライフ「%d」\n", x.name, x.life)
	// fmt.Println("")
	if x.life < 0 {
		fmt.Printf("%s 死亡！！\n", x.name)
		return false
	}
	// time.Sleep(time.Second)
	return true
}

func main() {
	/**
	戦士構造体の初期化
	名前：武田信玄
	生命エネルギー：１００
	送受信チャンネル（make関数により生成）
	代入する変数名：warriorA
	*/
	// ＿＿＿＿＿（１）＿＿＿＿＿
	// var warriorA Warrior = make("こばゆ", 100, chan int)

	warriorA := Warrior{"こばゆ", 100, make(chan int)}
	/**
	戦士構造体の初期化
	名前：上杉謙信
	生命エネルギー：１００
	送受信チャンネル（make関数により生成）
	代入する変数名：warriorB
	*/
	// ＿＿＿＿＿（２）＿＿＿＿＿
	// var warriorB Warrior = make("上杉謙信", 100, chan int)
	warriorB := Warrior{"上杉謙信", 100, make(chan int)}

	/**
	戦士同士の攻撃と勝ち負けの判定（無限ループ）
	*/
	for {
		// 武田信玄の攻撃をゴルーチンとして起動、対戦相手は、上杉謙信
		// ＿＿＿＿＿（３）＿＿＿＿＿
		rand.Seed(time.Now().UnixNano())
		go warriorA.sendAtack("上杉謙信")
		// 上杉謙信の攻撃をゴルーチンとして起動、対戦相手は、武田信玄
		// ＿＿＿＿＿（４）＿＿＿＿＿
		rand.Seed(time.Now().UnixNano())
		go warriorB.sendAtack("こばゆ")
		// 武田信玄の receiveAtack メソッドを起動して、ダメージを調べる
		// lifeA := ＿＿＿＿＿（５）＿＿＿＿＿
		lifeA := warriorA.receiveAttack("上杉謙信")
		// 上杉謙信の receiveAtack メソッドを起動して、ダメージを調べる
		// lifeB := ＿＿＿＿＿（６）＿＿＿＿＿
		lifeB := warriorB.receiveAttack("こばゆ")
		if lifeA == false || lifeB == false {
			break
		}
		// 武田信玄が負けたら無限ループを抜ける
		// if ＿＿＿＿＿（７）＿＿＿＿＿ {
		// if lifeA == false {
		// 	fmt.Printf("%s 負け！！\n", warriorA.name)
		// 	break
		// }
		// 上杉謙信が負けたら無限ループを抜ける
		// if ＿＿＿＿＿（８）＿＿＿＿＿ {
		// if lifeB == false {
		// 	fmt.Printf("%s 負け！！\n", warriorB.name)
		// 	break
		// }
		// １秒停止
		// time.Sleep(time.Second)
	}
}
