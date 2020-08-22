<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class fmtGetMax
    Inherits System.Windows.Forms.Form

    'フォームがコンポーネントの一覧をクリーンアップするために dispose をオーバーライドします。
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Windows フォーム デザイナーで必要です。
    Private components As System.ComponentModel.IContainer

    'メモ: 以下のプロシージャは Windows フォーム デザイナーで必要です。
    'Windows フォーム デザイナーを使用して変更できます。  
    'コード エディターを使って変更しないでください。
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.lstScore = New System.Windows.Forms.ListBox()
        Me.btnMaxValue = New System.Windows.Forms.Button()
        Me.btn = New System.Windows.Forms.Button()
        Me.SuspendLayout()
        '
        'lstScore
        '
        Me.lstScore.FormattingEnabled = True
        Me.lstScore.ItemHeight = 18
        Me.lstScore.Location = New System.Drawing.Point(12, 12)
        Me.lstScore.Name = "lstScore"
        Me.lstScore.Size = New System.Drawing.Size(354, 436)
        Me.lstScore.TabIndex = 0
        '
        'btnMaxValue
        '
        Me.btnMaxValue.Location = New System.Drawing.Point(12, 468)
        Me.btnMaxValue.Name = "btnMaxValue"
        Me.btnMaxValue.Size = New System.Drawing.Size(172, 50)
        Me.btnMaxValue.TabIndex = 1
        Me.btnMaxValue.Text = "最高点(&M)"
        Me.btnMaxValue.UseVisualStyleBackColor = True
        '
        'btn
        '
        Me.btn.Location = New System.Drawing.Point(194, 468)
        Me.btn.Name = "btn"
        Me.btn.Size = New System.Drawing.Size(172, 50)
        Me.btn.TabIndex = 2
        Me.btn.Text = "終了(&X)"
        Me.btn.UseVisualStyleBackColor = True
        '
        'fmtGetMax
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 18.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(378, 544)
        Me.Controls.Add(Me.btn)
        Me.Controls.Add(Me.btnMaxValue)
        Me.Controls.Add(Me.lstScore)
        Me.Name = "fmtGetMax"
        Me.Text = "成績一覧表"
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents lstScore As ListBox
    Friend WithEvents btnMaxValue As Button
    Friend WithEvents btn As Button

    Dim max As Integer = 0
    Private Sub fmtGetMax_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim list(10) As Integer
        Dim r As Random = New Random()
        Dim randNum As Integer
        For i As Integer = 0 To 10 - 1
            randNum = r.Next(100 + 1)
            list(i) = randNum
            lstScore.Items.Add(randNum)
            If randNum > max Then
                max = randNum
            End If
        Next

    End Sub

    Private Sub btnMaxValue_Click(sender As Object, e As EventArgs) Handles btnMaxValue.Click
        MessageBox.Show(String.Format("最高点は{0}点です", max), "最高得点")
    End Sub

    Private Sub btn_Click(sender As Object, e As EventArgs) Handles btn.Click
        Application.Exit()
    End Sub
End Class
